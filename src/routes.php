<?php

use App\Entity\Usuario;
// Routes

$app->get('/', function ($request, $response, $args) {
    $user = $this->em->getRepository(Usuario::class);
    $this->renderer->usuario = $user->findAll();

    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->any('/inserir-usuario', function ($request, $response, $args) {
    if($request->isPost()){
        $data = $request->getParams();

        $user = new Usuario();
        $user->hidratador($data);
        $this->em->persist($user);
        $this->em->flush();

        return $response->withStatus(302)->withHeader('Location', '/');
    }
    return $this->renderer->render($response, 'inserir-usuario.phtml', $args);
});

$app->get('/remover-usuario/{id}', function ($request, $response, $args) {
    $id = $args['id'];

    if (!empty($id)) {
        $repUser = $this->em->getRepository(Usuario::class);
        $user = $repUser->find($id);
        $this->em->remove($user);
        $this->em->flush();

        return $response->withStatus(302)->withHeader('Location', '/');
    }
});
