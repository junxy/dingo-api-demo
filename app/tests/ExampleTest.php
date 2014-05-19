<?php

class ExampleTest extends TestCase
{

    public function testPostsGet()
    {
        $this->client->request('GET', '/api/posts');
        $this->assertResponseOk();
    }

    public function testPostsAdd()
    {
        $this->client->request('POST', '/api/posts');
        $this->assertResponseOk();
    }

    public function testPostsUpdate()
    {
        $this->client->request('PUT', '/api/posts');
        $this->assertResponseOk();

        $this->client->request('PATCH', '/api/posts');
        $this->assertResponseOk();
    }

    public function testPostsDelete()
    {
        $this->client->request('DELETE', '/api/posts');
        $this->assertResponseOk();
    }
}
