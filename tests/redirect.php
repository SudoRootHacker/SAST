public function testRedirect()
{
    ob_start();
    include 'redirect.php';
    $output = ob_get_clean();

    $this->assertNotNull($output);
}
