<?php

namespace DevTest\Controller;

use Snowdog\DevTest\Controller\Base;
use Snowdog\DevTest\Model\UserManager;

/**
 * Class SitemapAction
 * @package DevTest\Controller
 */
class SitemapAction extends Base
{
    /**
     * @var UserManager
     */
    private $userManager;

    /**
     * @var \Snowdog\DevTest\Model\User
     */
    private $user;

    /**
     * SitemapAction constructor.
     * @param UserManager $userManager
     */
    public function __construct(UserManager $userManager)
    {
        $this->userManager = $userManager;
        if (isset($_SESSION['login'])) {
            $this->user = $this->userManager->getByLogin($_SESSION['login']);
        }
    }

    public function execute()
    {
        parent::execute();
        
        include __DIR__ . '/../view/sitemap.phtml';
    }
}
