<?php 

namespace App;

class Post 
{
    private function createDummyData($session) {
        $posts = [
            [ "title"=> "Donec ut dolor",
              "content"=> "Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.<br><br>Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.<br><br>Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat."
            ], [
              "title"=> "In hac habitasse platea dictumst",
              "content"=> "In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.<br><br>Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis."
            ], [
              "title"=> "Nam ultrices, libero non mattis pulvinar",
              "content"=> "Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.<br><br>In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.<br><br>Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.<br><br>Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.<br><br>Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris."
            ], [
              "title"=> "Mauris sit amet eros",
              "content"=> "Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.<br><br>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.<br><br>Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.<br><br>Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.<br><br>Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit."
            ], [
              "title"=> "Praesent blandit",
              "content"=> "Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.<br><br>Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.<br><br>Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.<br><br>Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem."
            ], [
              "title"=> "Nullam sit amet turpis elementum ligula vehicula consequat",
              "content"=> "Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.<br><br>Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.<br><br>Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.<br><br>Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.<br><br>Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit."
            ], [
              "title"=> "Nulla tempus",
              "content"=> "Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.<br><br>Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.<br><br>Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.<br><br>Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.<br><br>Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus."
            ], [
              "title"=> "Pellentesque eget nunc",
              "content"=> "Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.<br><br>Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.<br><br>Phasellus in felis. Donec semper sapien a libero. Nam dui."
            ], [
              "title"=> "Nullam porttitor lacus at turpis",
              "content"=> "In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.<br><br>Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.<br><br>Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.<br><br>Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris."
            ], [
              "title"=> "Fusce posuere felis sed lacus",
              "content"=> "Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.<br><br>Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.<br><br>Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.<br><br>Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.<br><br>In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet."
            ]  
        ];
        $session->put(['posts' => $posts]);
    }

    public function getPosts($session) {
        if(! $session->has('posts')) {
            $this->createDummyData($session);
        }
        return $session->get('posts');
    }

    public function getPost($session, $id) {
        if(! $session->has('posts')) {
            $this->createDummyData($session);
        }
        return $session->get('posts')[$id];
    }

    public function addPost($session, $title, $content) {
        if(! $session->has('posts')) {
            $this->createDummyData($session);
        }
        $posts = $session->get('posts');
        array_push($posts, ['title'=> $title, 'content'=> $content]);
        $session->put('posts', $posts);        
    }

    public function editPost($session, $id, $title, $content) {
        $posts = $session->get('posts');
        $posts[$id] = ['title'=> $title, 'content'=> $content];
        $session->put('posts', $posts);        
    }

    public function deletePost($session, $id) {
        $posts = $session->get('posts');
        unset($posts[$id]);
        $session->put('posts', $posts);        
    }
}