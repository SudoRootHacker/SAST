require_once 'xss.php';

use PHPUnit\Framework\TestCase;

class XssTest extends TestCase {

    public function testXssFileRuns() {
        ob_start();
        include 'xss.php';
        $output = ob_get_clean();

        $this->assertNotNull($output);
    }
}
