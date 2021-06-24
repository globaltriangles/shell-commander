# ShellCommander

This is a small php composer plugin to execute shell commands with support of regular output and errors during execurtion

## Installation

Use the package manager [composer](https://getcomposer.org/) to install shell-commander.

```bash
composer require globaltriangles/shell-commander
```

## Usage

```php
use ShellCommander\Commander;

//the string of the command to execute is this case a simple ls
$command = 'ls';

//Call the static method an Execute the command saving the outputs to a variable
$exec = Commander::exec($command);

if(! empty($exec['output'])) {
    //Do Something with the output string like so...
    echo $exec['output'];
}


if(! empty($exec['error'])) {
    //Do Something with the error string like so...
    echo $exec['error'];
}
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.


## License
[Apace 2.0](https://www.apache.org/licenses/LICENSE-2.0)