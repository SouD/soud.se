<?php

class ProjectTableSeeder extends Seeder {

    public function run()
    {
        DB::table('projects')->delete();

        Project::create(array(
            'name' => 'SouD.se',
            'link' => NULL,
            'image' => 'img/projects/soud_se.png',
            'brief' => 'This project is the source code of this very site! Built with Laravel 4 and Bootstrap 3.1!',
            'description' => "This is my very own site. Look Ma', I dun' it all by myself! Seriously though, this is the source to my own site where you can read a very short description of me and look around at various projects that I have done. Every single project will probably not be uploaded to the site but at least the good ones should make it. If you have any quesstions regarding the site or the site's source code then feel free to drop me a line at sorensen.linus@gmail.com."
        ));

        Project::create(array(
            'name' => 'ZeroTheory',
            'link' => 'https://github.com/SouD/ZeroTheory',
            'image' => 'img/projects/zerotheory.png',
            'brief' => 'Simulate your DPS as a warlock in World of Warcraft build 6005 on a MaNGOS server!',
            'description' => "This is yet another WoW dps sim. This one was based directly of the MaNGOS source code though, so it should very accurately predict your personal dps on a MaNGOS Zero server. It is probably very accurate on modified servers as well. It's only for warlocks though, I could not be arsed with building something as cool as Rawr. I really want to in the future though! Oh yeah, I wrote this quite some time ago and I apparently had never heard of CORS so it might actually be a bother making this work right now. Maybe someday I'll get around to fixing it."
        ));

        Project::create(array(
            'name' => 'CLF',
            'link' => 'https://github.com/SouD/CLF',
            'image' => 'img/projects/clf.png',
            'brief' => 'A Combat Log Fixer for World of Warcraft build 8606. Fixes your combat log when it decides to break down!',
            'description' => "This is a short and sweet AddOn that can make all of your frustrating combat log problems dissappear in the blink of an eye! Originally written for build 8606 but it should work just fine in most of the later builds since the core functionality is yet to be changed by Blizzard. I apologize for the lack of options, but I felt that there really was no need for more than the ability to set your timer."
        ));

        Project::create(array(
            'name' => 'Tinspect',
            'link' => 'https://github.com/SouD/Tinspect',
            'image' => 'img/projects/tinspect.png',
            'brief' => 'Inspect talents in old school World of Warcraft! (Build 6005, commonly referred to as "Vanilla WoW")',
            'description' => "This is one of the stranger things I've ever written. I told my guild master that as an officer in the guild my job would be much easier if I could just check the other players talents. Thats when the idea for this AddOn was born. The sad part about it is that since there was no API to access other players talents in build 6005 both players are required to have the AddOn for it to work. This is fine if you're in a guild where the members are forced to use the AddOn but really not ideal outside of that situation. It uses the ingame AddOn chat channel to communicate and send the talents as a string of numbers which then can be decoded against a built in talent database."
        ));
    }

}
