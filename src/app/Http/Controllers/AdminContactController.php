<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Carbon\Carbon;

class AdminContactController extends Controller
{
    public function index(Request $request)
    {
        $query = Contact::query();

        // 検索条件
        if ($request->filled('keyword')) {
            $query->where('name', 'like', "%{$request->keyword}%")
                  ->orWhere('email', 'like', "%{$request->keyword}%");
        }

        if ($request->filled('gender')) {
            $query->where('gender', $request->gender);
        }

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        if ($request->filled('date')) {
            $query->whereDate('created_at', $request->date);
        }

        // ページネーション（10件ずつ）
        $contacts = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.contacts.index', compact('contacts'));
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contacts.show', compact('contact'));
    }

    // CSV出力
    public function export()
    {
        $contacts = Contact::all();

        $csv = "ID,名前,性別,メール,カテゴリ,本文,日付\n";

        foreach ($contacts as $c) {
            $csv .= "{$c->id},{$c->name},{$c->gender},{$c->email},{$c->category},{$c->content},{$c->created_at}\n";
        }

        return response($csv)
            ->header('Content-Type', 'text/csv')
            ->header('Content-Disposition', 'attachment; filename=contacts.csv');
    }
}
