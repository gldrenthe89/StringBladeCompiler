<?php

namespace Wpb\String_Blade_Compiler\Tests\Blade;

class BladeIfIssetStatementsTest extends AbstractBladeTestCase
{
    public function testIfStatementsAreCompiled()
    {
        $string = '@isset ($test)
breeze
@endisset';
        $expected = '<?php if(isset($test)): ?>
breeze
<?php endif; ?>';
        $this->assertEquals($expected, $this->compiler->compileString($string));
    }
}
