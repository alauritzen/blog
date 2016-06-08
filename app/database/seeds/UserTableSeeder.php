<?php 

class UserTableSeeder extends Seeder
{
    public function run()
    {
        echo "The user table seeder is run";
        $user = new User();
        $user->username = 'alaurit';
        $user->email = 'alaurit@gmail.com';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->save();
        
        $user = new User();
        $user->username = 'dtrump';
        $user->email = 'dtrump@dbag.com';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->save();
        
        $user = new User();
        $user->username = 'g_ennis';
        $user->email = 'preacher@amc.com';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->save();

        $user = new User();
        $user->username = 'theyLive';
        $user->email = 'rowdyroddy@piper.com';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->save();

    }



}