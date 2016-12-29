<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Riari\Forum\Models\Thread;
use Riari\Forum\API\Dispatcher;
use Riari\Forum\Models\Post;

class HomeComposer
{
    /**
     * The URL of the Arma 3 Developer updates RSS feed.
     *
     * @var $url
     */
    protected $url;

    /**
     * The JSON contents of the RSS feed.
     *
     * @var $json
     */
    protected $json;

    /**
     * The decoded JSON objects of the RSS feed.
     *
     * @var $obj
     */
    protected $obj;

    /**
     * The thread
     *
     * @var $recentThreads
     */
    protected $recentThreads;


//    public function __construct(Post $recentPosts)
//    {
//        $this->getRecentPosts($recentPosts);
//        $this->getDevUpdates();
//    }
    public function __construct(Thread $recentThreads)
    {
        $this->getRecentThreads($recentThreads);
        $this->getDevUpdates();
    }

    /**
     * Get the 10 most recent forum posts as a collection.
     *
     * @return void
     */
//    public function getRecentPosts()
//    {
//        $this->recentPosts = Post::orderBy('updated_at', 'desc')
//            ->take(5)
//            ->get();
//    }

    public function getRecentThreads()
    {
        $this->recentThreads = Thread::orderBy('updated_at', 'desc')
            ->take(5)
            ->get();
    }

    /**
     * Get the latest Arma 3 Developer Updates via JSON and return them to the home view.
     *
     * @return void
     */
    public function getDevUpdates()
    {
        $this->url = 'http://arma3.com/loadDev?feed=rss.xml';
        $this->json = file_get_contents($this->url);
        $this->obj = json_decode($this->json, true);
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $view->with([
            'dev_updates'   => $this->obj,
            'recent_threads'  => $this->recentThreads
        ]);
    }
}