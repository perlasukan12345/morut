<?php

if (!function_exists("format_rupiah")) {
	function format_rupiah($angka)
	{
		$rupiah = number_format($angka, 0, ',', '.');
		return $rupiah;
	}
}

if (!function_exists("generate_token")) {
	function generate_token($name = null)
	{
		$token = md5(uniqid());
		if (!$name) {
			session()->set('token_hash', $token);
		} else {
			session()->set($name, $token);
		}

		return $token;
	}
}

if (!function_exists("check_token")) {
	function check_token($name = null, $token)
	{
		if (!$name) {
			$tokenName = 'token_hash'; // token
		} else {
			$tokenName = $name; // token
		}

		if (session()->has($tokenName) && $token === session()->get($tokenName)) {
			session()->remove($tokenName);
			return true;
		}

		return false;
	}
}

if (!function_exists("date_indo")) {
	function date_indo($tanggal)
	{
		$bulan = array(
			1 =>   'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		);
		$pecahkan = explode('-', $tanggal);

		// variabel pecahkan 0 = tanggal
		// variabel pecahkan 1 = bulan
		// variabel pecahkan 2 = tahun

		return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
	}
}

if (!function_exists("date_archive")) {
	function date_archive($tanggal)
	{
		$bulan = array(
			1 =>   'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		);
		$pecahkan = explode('-', $tanggal);

		// variabel pecahkan 0 = bulan
		// variabel pecahkan 1 = tahun

		return $bulan[(int)$pecahkan[0]] . ' ' . $pecahkan[1];
	}
}

if (!function_exists("getRole")) {
	function getRole($role_id)
	{
		$db = \Config\Database::connect();
		$permissionList = array();

		$permission = $db->table('role_permission AS rp')
			->select('p.permission_description AS permission_description')
			->join('permission AS p', 'p.permission_id = rp.permission_id', 'left')
			->where('rp.role_id', $role_id)->get()->getResult();
		//Loop through the results
		foreach ($permission as $row) {
			$permission_description = str_replace(" ", "-", strtolower($row->permission_description));
			$permissionList[$permission_description] = true;
		}

		return $permissionList;
	}
}

if (!function_exists("loadRoles")) {
	function loadRoles()
	{
		$db = \Config\Database::connect();

		$user = $db->table('user')->where('username', session()->get('username'))->get()->getRow();

		$fetchRoles = $db->table('user AS u')
			->select('u.role_id AS role_id, r.role_name AS role_name')
			->join("role AS r", "r.role_id = u.role_id", "left")
			->where("u.user_id", $user->user_id)
			->get()->getResult();

		// Populate the array
		foreach ($fetchRoles as $row) {
			$userRoles[$row->role_name] = getRole($row->role_id);
		}

		return $userRoles;
	}
}

if (!function_exists("user_can")) {
	function user_can($permission)
	{
		$data = loadRoles();
		foreach ($data as $rolekey => $role) {
			foreach ($role as $key => $value) {
				if ($key == $permission) {
					return true;
				}
			}
		}
		return false;
	}
}


if (!function_exists("user_can")) {
	function user_can($role, $permission)
	{
		foreach ($role as $rolekey => $role) {
			foreach ($role as $key => $value) {
				if ($key == $permission) {
					return true;
				}
			}
		}
		return false;
	}
}
