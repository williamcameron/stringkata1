# TDD String Kata
TDD String Kata. Based on [Roy Oshrove TDD Kata 1](http://osherove.com/tdd-kata-1/)


TODO
----
* Delimiters can be of any length with the following format:  “//[delimiter]\n” for example: “//[***]\n1***2***3” should return 6
// $this->assertEquals(6, $this->stringCalculator->add("//[***]\n1***2***3"))
* Allow multiple delimiters like this:  “//[delim1][delim2]\n” for example “//[*][%]\n1*2%3” should return 6.
* make sure you can also handle multiple delimiters with length longer than one char