<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;

class BannedUserSubscriber implements EventSubscriberInterface
{
    private Security $security;
    private UrlGeneratorInterface $urlGenerator;

    public function __construct(Security $security, UrlGeneratorInterface $urlGenerator)
    {
        $this->security = $security;
        $this->urlGenerator = $urlGenerator;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => 'onKernelRequest',
        ];
    }

    public function onKernelRequest(RequestEvent $event): void
    {
        if (!$event->isMainRequest()) {
            return;
        }

        $user = $this->security->getUser();
        
        if (!$user) {
            return;
        }

        $request = $event->getRequest();
        $path = $request->getPathInfo();
        
        // Ne pas rediriger pour la page d'accueil et la déconnexion
        if ($path === '/' || $path === '/logout') {
            return;
        }

        // Si l'utilisateur est banni et essaie d'accéder à une page autre que l'accueil
        if ($this->security->isGranted('ROLE_BANNED')) {
            $event->setResponse(new RedirectResponse($this->urlGenerator->generate('app_home')));
        }
    }
}