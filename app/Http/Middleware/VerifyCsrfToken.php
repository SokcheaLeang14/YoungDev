<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
	/**
	 * The URIs that should be excluded from CSRF verification.
	 *
	 * @var array<int, string>
	 */
	protected $except = [
		'/api/students/register',
		'/api/students/login',
		'/api/students/{id}',
		'/api/students/update/{id}',
		'/api/students/delete/{id}',
		'/api/books',
		'/api/books/detail/{id}',
		'/api/books/search',
		'/api/authors',
		'/api/author/{id}',
		'/api/categories',
	];
}
