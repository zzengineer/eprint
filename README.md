# eprint
Kernighan style eprint utility functions for php

[![Latest Stable Version](https://poser.pugx.org/zzengineer/getoptc/v/stable)](https://packagist.org/packages/zzengineer/eprint) [![Total Downloads](https://poser.pugx.org/zzengineer/getoptc/downloads)](https://packagist.org/packages/zzengineer/eprint) [![Latest Unstable Version](https://poser.pugx.org/zzengineer/getoptc/v/unstable)](https://packagist.org/packages/zzengineer/eprint) [![License](https://poser.pugx.org/zzengineer/getoptc/license)](http://opensource.org/licenses/MIT)
---
### NAME
eprint -- formatted to stderr printing utility functions

### SYNOPSIS

`function nprint($msg)`
`function eprint($msg)`
`function wprint($msg)`

### DESCRIPTION

All functions will print a message to `STDERR` prepended with date, filename, pid and the level depending on the function used. The **eprint()** function will additionaly halt the execution with exit code (2). If `$msg` is passed as a multyline string the string will be indented to emphasize his multiline nature


### EXAMPLES

the following code

```php

nprint('this is a notice');
nprint('this is a dump of the $_ENV '/ print_r($_ENV,true));
wprint('this should be checked sometime');
eprint('and this will stop the execution');

```

will output

```

2015-09-21 19:35:55 printme [81662] notice: this is a notice
2015-09-21 19:35:55 printme [81662] notice: this is a dump of the $_ENV Array
        (
            [PAGER] => more
            [EDITOR] => vi
            [...]
            [SHELL] => /bin/sh
            [BLOCKSIZE] => K
        )
2015-09-21 19:35:55 printme [81662] warning: this should be checked sometime
2015-09-21 19:35:55 printme [81662] error: and this will stop the execution

```
