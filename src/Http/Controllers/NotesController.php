<?php

namespace Itainathaniel\AdminNotes\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NotesController
{

	private $file = 'AdminNotes.txt';
	
	function index()
	{
		if (!Storage::exists($this->file)) {
			$this->createFile();
		}

		return response([
			'notes' => Storage::get($this->file),
		], 200);
	}

	public function store(Request $request)
	{
		if ($request->has('notes')) {
			Storage::put($this->file, $request->notes);
		}

		return response([
			'notes' => Storage::get($this->file),
		], 200);
	}

	private function createFile()
	{
		Storage::put($this->file, '');
	}
}
