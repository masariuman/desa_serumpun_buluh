<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    //pilihan field table
	protected $table = 'event';

	protected $fillable = [
		'judul_event',
		'isi_event',
		'tanggal_event',
		'status',
	];
}
