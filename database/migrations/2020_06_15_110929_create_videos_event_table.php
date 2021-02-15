<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = 'CREATE TABLE videos_event (
            id int(11) NOT NULL AUTO_INCREMENT, 
            school_id int(11) NOT NULL, 
            session_id int(11) NOT NULL,
            class_id int(11) NOT NULL,
            section_id int(11)  NULL,
            aud_event varchar(50)  NULL,
            vid_event varchar(50)  NULL,
            pdf_event varchar(50)  NULL,
            audio_fil varchar(400)  NULL,
            video_fil varchar(500)  NULL,
            pdf varchar(200)  NULL, 
            event_type varchar(50) NOT NULL,  
            header text NOT NULL, 
            footer text NOT NULL, 
            date varchar(50) NOT NULL, 
            platfom varchar(50) NOT NULL, 
            created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, 
            updated_at timestamp NOT NULL DEFAULT "0000-00-00 00:00:00",
            PRIMARY KEY (`id`));';
    \DB::connection()->getPdo()->exec($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('videos_event');
    }
}
