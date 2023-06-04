<?php

function getUsers()
{
    return json_decode(file_get_contents( __DIR__ . '/dataset/users.json'), true);
}

function createUser($data)
{
    $users = getUsers();
    $biggestId = $_POST['biggestid'];
    
    $data['id'] = $biggestId + 1;

    $data['address'] = array(
        'street' => $data['street'],
        'zipcode' => $data['zipcode'],
        'city' => $data['city']
    );
    $data['company'] = array(
        'name' => $data['company']
    );
    unset($data['street'], $data['zipcode'], $data['city'], $data['biggestid']);

    $users[] = $data;

    putJson($users);

    return $data;
}

function deleteUser($id)
{
    $users = getUsers();

    foreach ($users as $i => $user) {
        if ($user['id'] == $id) {
            array_splice($users, $i, 1);
        }
    }

    putJson($users);
}

function putJson($users)
{
    file_put_contents( __DIR__ . '/dataset/users.json', json_encode($users, JSON_PRETTY_PRINT));
}

?>