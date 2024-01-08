<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Http\Request;

class TablesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'admin-panel.tables.tables',
            [
                'tables' => Table::orderBy('id', 'desc')->get()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-panel.tables.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Table::create($request->except('_token'));
            $message = 'Table created successfully';
        } catch (\Throwable $th) {
            $message = "an error occured , please try again";
        }
        return redirect(route('admin.tables.index'))->with('message', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(Table $table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Table $table)
    {
        return view('admin-panel.tables.edit', [
            'table' => $table
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Table $table)
    {
        try {
            $table->update($request->except(['_token', '_method']));
            $m = "Tables '" . $request->name . "' updated successfully";
        } catch (\Throwable $th) {
            $m = "an error occured";
        }
        return redirect(route('admin.tables.index'))->with('message', $m);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Table $table)
    {
        // dd($table);
        $table->delete();
        try {
            $m = "Table deleted successfully";
            $type = 'message';
        } catch (\Throwable $th) {
            $m = "Can not delete table, please try again";
            $type = 'error';
        }
        return redirect(route('admin.tables.index'))->with($type, $m);
    }
}