<?php

use PHPUnit\Framework\TestCase;

class StringsTest extends TestCase
{
    /**
     * @see https://www.php.net/manual/en/language.types.string.php
     */
    public function testVariableParsing()
    {
        $foo = 'world';

        // Double quotes.
        $this->assertEquals('Hello world', "Hello $foo");

        // Single quotes.
        $this->assertEquals('Hello $foo', 'Hello $foo');

        // TODO "Hello ${foo}"
        $this->assertEquals('Hello world', "Hello ${foo}");

        // TODO "Hello " . $foo
        $this->assertEquals('Hello world', "Hello " . $foo);

        // TODO Heredoc
        $str = <<<EOT
        $foo
        EOT;
        $this->assertEquals('Hello world', "Hello $str");
        
        // TODO Nowdoc
        $str = <<<'EOT'
        world
        EOT;
        $this->assertEquals('Hello world', "Hello $str");

    }

    /**
     * @see https://www.php.net/manual/en/ref.strings.php
     */
    public function testStringFunctions()
    {
        // trim — Strip whitespace (or other characters) from the beginning and end of a string
        $this->assertEquals('Hello', trim('Hello         '));
        $this->assertEquals('Hello', trim('Hello......', '.'));

        // ltrim — Strip whitespace (or other characters) from the beginning of a string
        // TODO to be implemented
        $this->assertEquals('to be implemented', ltrim('       to be implemented'));
        $this->assertEquals('to be implemented', ltrim('......to be implemented', '.'));

        // rtrim — Strip whitespace (or other characters) from the end of a string
        // TODO to be implemented
        $this->assertEquals('to be implemented', rtrim('to be implemented         '));
        $this->assertEquals('to be implemented', rtrim('to be implemented......', '.'));

        // strtoupper — Make a string uppercase
        $this->assertEquals('HELLO', strtoupper('hello'));

        // strtolower — Make a string lowercase
        $this->assertEquals('hello', strtolower('HeLlO'));

        // ucfirst — Make a string's first character uppercase
        // TODO to be implemented
        $this->assertEquals('To be implemented', ucfirst('to be implemented'));

        // lcfirst — Make a string's first character lowercase
        // TODO to be implemented
        $this->assertEquals('to be implemented', lcfirst('To be implemented'));

        // strip_tags — Strip HTML and PHP tags from a string
        // TODO to be implemented
        $this->assertEquals('to be implemented', strip_tags('<p>to be</p><!-- Комментарий --> <a href="#fragment">implemented</a>'));

        // htmlspecialchars — Convert special characters to HTML entities
        // TODO to be implemented
        $this->assertEquals('&amp; to be implemented &lt;', htmlspecialchars('& to be implemented <'));

        // addslashes — Quote string with slashes
        // TODO to be implemented
        $this->assertEquals('to \"be \\\implemented', addslashes('to "be \implemented'));

        // strcmp — Binary safe string comparison
        // TODO to be implemented
        $this->assertEquals(0, strcmp('to be implemented', 'to be implemented') !== 0);

        // strncasecmp — Binary safe case-insensitive string comparison of the first n characters
        // TODO to be implemented
        $this->assertEquals('to be implemented', ucfirst('TO bE Implemented'));

        // str_replace — Replace all occurrences of the search string with the replacement string
        // TODO to be implemented
        $this->assertEquals('to be implemented', str_replace("implement", "implemented", "to be implement"));

        // strpos — Find the position of the first occurrence of a substring in a string
        // TODO to be implemented
        $this->assertEquals(1, strpos("to be implemented", "o"));

        // strstr — Find the first occurrence of a string
        // TODO to be implemented
        $this->assertEquals('/manual/ru/function.strstr.php', substr("https://www.php.net/manual/ru/function.strstr.php", 'manual'));
        // strrchr — Find the last occurrence of a character in a string
        // TODO to be implemented
        $this->assertEquals('/function.strrchr.php', substr("https://www.php.net/manual/ru/function.strrchr.php", '/'));

        // substr — Return part of a string
        // TODO to be implemented
        $this->assertEquals('Hello', substr("Hello World", 0, 5)); 

        // sprintf — Return a formatted string
        // TODO to be implemented
        $num = 3;
        $location = 'test';
        $format = 'to be implemented %d %s';
        $this->assertEquals('to be implemented 3 test', sprintf($format, $num, $location));

    }
}