# HandyDumperBundle

Helpers to ease debugging by Dumping And Dying given variable(s)

## Use 

Put this in a global helpers file:

    function dd()
    {
        \fabienChn\HandyDumperBundle\Component\HandyDumper::dd(func_get_args());
    }
    
    function ed(string $text)
    {
        \fabienChn\HandyDumperBundle\Component\HandyDumper::ed($text);
    }

And use it this way:

    dd(array); // this is going to dump the array and die
---
    ed(string); // this is going to echo the string and die