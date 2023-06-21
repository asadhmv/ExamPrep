<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\Student;
use App\Entity\Subject;
use App\Entity\User;
use App\Entity\Ressources;
use App\Entity\Quizmark;
use App\Entity\Quiz;
use App\Entity\Module;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\RequestStack;

class DashboardController extends AbstractDashboardController
{
    
    private RequestStack $rs;
    private string $current_role;

    public function __construct(RequestStack $requestStack, Security $security)
    {
        $this->rs = $requestStack;
        $first_role = $security->getUser()->getRoles()[0];
        if($this->rs->getSession()->get('_role')==null)
            $this->rs->getSession()->set('_role', $first_role);
  
        $this->current_role = $this->rs->getSession()->get('_role');
    }
    #[Route('/admin', name: 'dashboard')]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted(attribute:"IS_AUTHENTICATED_FULLY");
        /** @var User $user */
        $user=$this->getUser();
        return match($user->isVerified()){
            true=>parent::index(),
            false=>$this->render(view:"please-verify-email.html.twig"),
        };
        #return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('ExamPrep');
    }
    public function configureUserMenu(UserInterface $user): UserMenu
    {
        return parent::configureUserMenu($user)
            ->setName($user->getUserIdentifier())
            ->setGravatarEmail($user->getEmail())
         //   ->setAvatarUrl('https://www.clipartmax.com/png/full/405-4050774_avatar-icon-flat-icon-shop-download-free-icons-for-avatar-icon-flat.png')
            ->displayUserAvatar(true);
    }



    public function configureAssets(): Assets
    {
        return Assets::new()->addCssFile('build/css/admin.css');
    }
    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
        #yield MenuItem::linkToCrud('Students', 'fas fa-list', Student::class);
        if ( $this->current_role == 'ROLE_ADMIN')yield MenuItem::linkToCrud('Users', 'fas fa-list', User::class);
        yield MenuItem::linkToCrud('Modules', 'fas fa-list', Module::class);
        yield MenuItem::linkToCrud('Quizs', 'fas fa-list', Quiz::class);
        if ( $this->current_role == 'ROLE_ADMIN')yield MenuItem::linkToCrud('QuizMarks', 'fas fa-list', Quizmark::class);
        yield MenuItem::linkToCrud('Subjects', 'fas fa-list', Subject::class);
        yield MenuItem::linkToCrud('Ressources', 'fas fa-list', Ressources::class);
    
    }
}
