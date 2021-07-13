<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'M R Mizan',
                'phone_number' => '01795221226',
                'email' => 'mizan@gmail.com',
                // 'account_type' => NULL,
                // 'profile_picture_path' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$79MmWNB7MUsQks13HSvTo.0Rwof.EmOdNU9oZQlUJBKBGNvxm1VtO',
                // 'registration_source' => NULL,
                // 'fcm_token' => NULL,
                // 'pin' => NULL,
                'remember_token' => 'cqSGiiFtAYR00H4H7MbPg8jo4XOLSaQtVAjWZS6TwfVF1GXn2XV52ZNJJYjb',
                'created_at' => '2021-06-03 14:47:31',
                'updated_at' => '2021-06-03 15:43:09',
            ),
            // 1 => 
            // array (
            //     'id' => 6,
            //     'name' => 'Mohammad N Mahfuj',
            //     'phone_number' => '01776476970',
            //     'email' => NULL,
            //     'account_type' => 'painter',
            //     'profile_picture_path' => NULL,
            //     'email_verified_at' => NULL,
            //     'password' => '$2y$10$Hm.wmfHs.4aW379tYCjVCeicvO4D4HQhDT6Fi3iOGj7p8niTO9yjK',
            //     'registration_source' => NULL,
            //     'fcm_token' => 'cd3pmMNWiZg:APA91bHVFwV-kM3yRxXRtLRxnY0lCf9liJVFQMbhPnDA5xIkX15RWHNmqv_ks2akEF2XBeM0dyJhWuZ3Y40lEdqD2aEw7-qmCL27zdI78QuSACMbtqy5Mdgh1BbzUYxVtsjsYvJxQo8X',
            //     'pin' => '123456',
            //     'remember_token' => NULL,
            //     'created_at' => '2021-06-27 17:44:24',
            //     'updated_at' => '2021-06-27 17:44:24',
            // ),
        ));
    }
}
