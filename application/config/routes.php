<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['Kontak'] = 'Home/Kontak';
$route['Daftar'] = 'Home/Daftar';
// $route['Kegiatan_PWC'] = 'Kegiatan/Detail_PWC';
// $route['Kegiatan_NT'] = 'Kegiatan/Detail_Napak_Tilas';
// $route['Kegiatan_GELAS'] = 'Kegiatan/Detail_Gelar_Senja';


$route['Daftar_PWC'] = 'DaftarPWC/daftar_pwc';
$route['Success_PWC/(:num)'] = 'DaftarPWC/success_pwc/$1';
$route['Failed_PWC'] = 'DaftarPWC/failed_pwc';

$route['Daftar_NT'] = 'DaftarNT/daftar_nt';
$route['Success_NT/(:num)'] = 'DaftarNT/success_nt/$1';
$route['Failed_NT'] = 'DaftarNT/failed_nt';

$route['Daftar_GS'] = 'DaftarGelas/daftar_gs';
$route['Success_GS/(:num)'] = 'DaftarGelas/success_gs/$1';
$route['Failed_GS'] = 'DaftarGelas/failed_gs';


//ADMIN PAGE DIBAWAH INI 
$route['Login'] = 'Admin/Auth/Auth/masuk';
$route['Logout'] = 'Admin/Auth/Auth/keluar';
$route['Forgot-Pass'] = 'Admin/Auth/Auth/lupa_pass';
$route['Admin-Page'] = "Admin/Admin";
$route['Admin_PWC'] = "Admin/Admin/pwc_admin";
$route['Admin_Tatil'] = "Admin/Admin/nt_admin";
$route['Admin_Gelas'] = "Admin/Admin/gs_admin";

$route['Admin_Pramuka'] = "Admin/Admin/pmk_admin";
$route['Add_Pmk'] = "Admin/Process_pmk/tambah_data_pmk";
$route['Edit-pmk/(:any)'] = "Admin/Process_pmk/Edit_pmk/$1";
$route['Delete-pmk/(:any)'] = "Admin/Process_pmk/hapus_pmk/$1";

// Route news
$route['News-Page'] = 'Admin/Admin/berita';
$route['Add-News-Page'] = 'Admin/Process_news/tambah_berita';
$route['Edit-News/(:num)'] = 'Admin/Process_news/edit_berita/$1';
$route['Delete-News/(:num)'] = 'Admin/Process_news/hapus_berita/$1';
$route['Detail-News/(:num)'] = 'Admin/Process_news/detail_berita/$1';
$route['Publish-News/(:num)'] = 'Admin/Process_news/publish_berita/$1';
$route['Draft-News/(:num)'] = 'Admin/Process_news/draft_berita/$1';
