public function testCrypto()
{
    $_POST['password'] = 'test123';

    ob_start();
    include 'crypto.php';
    $output = ob_get_clean();

    $this->assertStringContainsString(md5('test123'), $output);
}
