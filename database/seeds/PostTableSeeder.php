<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    public function run()
    {
        Post::create([
            'title' => 'HARVEST IS CONTINGENT ON SEEDS SOWN',
            'content' => '<h4>💯 FROM THE PREACHER\'S DESK💯
            SHALOM BRETHREN!!!</h4>
            
            <p>Glory be to God for blessing us with a new week, and we come your way today with a message titled, 
            HARVEST IS CONTINGENT ON SEEDS SOWN.</p>
            <br />
            <p>🔲There is a lifetime principle which remains unchanged and it\'s clearly seen in the Bible [Genesis 8:22]. 
            The cosmos gives reward to every kind of seed that is sown. With every seed that is cultivated, the same 
            of its kind will be harvested.</p>
            <br />
            
            <p>🔲The principle of sowing cannot be overemphasized. Let\'s be intentional about the seeds we sow, if we 
            desire to reap the fruits thereof.</p>
            In the area you want to rise and excel, endeavor to sow that kind of seeds[skills] that will actualize your 
            dream.
            <br />
            
            <p>This week and beyond, purpose  to sow strategic seeds in all facets of your life. 
            Have a blessed day.  👨🏾‍🦳🤞🏾❤️‍🔥💯</p>',
            'category_id' => 1,
            'user_id' => 1,
            'coverImage' => 'posts/3.jpg'
        ]);

        Post::create([
            'title' => 'THE ESSENCE OF KNOWLEDGE GAIN',
            'content' => '<h4>💯 FROM THE PREACHER\'S DESK💯
            SHALOM BRETHREN!!!</h4>
            <br />
            <p>Glory be to God for gifting us another blessed day, and we come your way today with a message titled, 
            THE ESSENCE OF KNOWLEDGE GAIN.</p>
            <br />
            <p>🔲Many a time, Christians fall short when it comes to studying having successfully convinced ourselves that 
            what we know currently is enough. We lack the ability to be CURIOUS and don’t make any effort to ask questions. 
            This act cause us to continue to wallow in ignorance because the very knowledge that will 
            bring us life we have no idea of![Hosea 4:6]</p>
            <br />
            <p>🔲There is so much mystery surrounding us that have the keys in the Word and that scripture is patiently 
            waiting for you to unravel it! For all you know, you will discover the antidote to the afflictions in your 
            family, bringing down strongholds and securing not just you and your loved ones, but an entire generation 
            because you studied.</p>
            <br />
            <p>This week and beyond, purpose to ask questions and seek out the answers from the Word. 
            Have a blessed day.  👨🏾‍🦳🤞🏾❤️‍🔥💯</p>',
            'category_id' => 1,
            'user_id' => 1,
            'coverImage' => 'posts/2.jpg'
        ]);

        Post::create([
            'title' => 'STAYING GLUED TO THE WORD',
            'content' => '<h4>💯 FROM THE PREACHER\'S DESK💯
            SHALOM BRETHREN!!!</h4>
            <br />
            <p>Glory be to God for gifting us another blessed day, and we come your way today with a message titled, STAYING 
            GLUED TO THE WORD, A RECIPE FOR PURITY</p>
            <br />
            <p>🔲In this era of high moral decadence, the tendency of a believer ditching into sin is inevitable. We are open 
            to the influences that comes with the enemy\'s strategic plans to draw us away from God.</p>
            <br />
            <p>🔲 If we draw away from studying God\'s word, we will be developing other weird habits that absolutely has no 
            bearing to what God desires of us.</p>
            <br />
            <p>It is the word that becomes a refinery fire which burns away the chaff and purifies our thoughts and intents. 
            As the Psalmist said, " Thy word have I hid in mine heart, That I might not sin against thee" (Psalm 119:11).</p>
            <br />
            <p>This week and beyond, purpose to stay glued to the word of God if you want to walk in purity. 
            Have a blessed day.  👨🏾‍🦳🤞🏾❤️‍🔥💯.</p>',
            'category_id' => 1,
            'user_id' => 1,
            'coverImage' => 'posts/1.jpg'
        ]);
    }
}
