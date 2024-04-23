<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class CreateUsersSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run(): void
{
$users = [
[
'name'=>'Admin User',
'email'=>'admin@email.com',
'type'=>1,
'password'=> bcrypt('123456'),
],
[
'name'=>'Manager User',
'email'=>'manager@email.com',
'type'=> 2,
'password'=> bcrypt('123456'),
],
[
'name'=>'User',
'email'=>'user@email.com',
'type'=>0,
'password'=> bcrypt('123456'),
],
[
'name'=>'Super Admin User',
'email'=>'superadmin@email.com',
'type'=>3,
'password'=> bcrypt('123456'),
],
[
'name' => 'Dosen User',
'email' => 'dosen@email.com',
'type' => 4, // Dosen
'password' => bcrypt('123456'),
],
[
'name' => 'Mahasiswa User',
'email' => 'mahasiswa@email.com',
'type' => 5, // Mahasiswa
'password' => bcrypt('123456'),
],
[
'name' => 'Tendik User',
'email' => 'tendik@email.com',
'type' => 6, // Tendik
'password' => bcrypt('123456'),
],
[
'name' => 'Admin Akademik User',
'email' => 'adminakademik@email.com',
'type' => 7, // Admin Akademik
'password' => bcrypt('123456'),
],
[
'name' => 'Admin Keuangan User',
'email' => 'adminkeuangan@email.com',
'type' => 8, // Admin Keuangan
'password' => bcrypt('123456'),
],
[
'name' => 'Direktur User',
'email' => 'direktur@email.com',
'type' => 9, // Direktur
'password' => bcrypt('123456'),
],
[
'name' => 'Wakil Direktur 1 User',
'email' => 'wakildirektur1@email.com',
'type' => 10, // Wakil Direktur 1
'password' => bcrypt('123456'),
],
[
'name' => 'Wakil Direktur 2 User',
'email' => 'wakildirektur2@email.com',
'type' => 11, // Wakil Direktur 2
'password' => bcrypt('123456'),
],
[
'name' => 'Wakil Direktur 3 User',
'email' => 'wakildirektur3@email.com',
'type' => 12, // Wakil Direktur 3
'password' => bcrypt('123456'),
],
[
'name' => 'Admin LPPM User',
'email' => 'admin_lppm@email.com',
'type' => 13, // Admin LPPM
'password' => bcrypt('123456'),
],
[
'name' => 'Admin SDM User',
'email' => 'admin_sdm@email.com',
'type' => 14, // Admin SDM
'password' => bcrypt('123456'),
],

];
foreach ($users as $key => $user) {
User::create($user);
}
}
}
