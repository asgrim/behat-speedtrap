# Behat Speedtrap

[![Build Status](https://travis-ci.org/Brunty/behat-speedtrap.svg?branch=master)](https://travis-ci.org/Brunty/behat-speedtrap)

Inspired by https://github.com/johnkary/phpunit-speedtrap

## Installation

Install via composer:

`composer require brunty/behat-speedtrap --dev`

## Configure

In your `behat.yml` file add the following extension configuration:

```yaml
default:
  extensions:
    Brunty\Behat\SpeedtrapExtension: ~
```

To configure the threshold for slow scenarios (default 2000ms) specify the `scenario_threshold` configuration option:

```yaml
default:
  extensions:
    Brunty\Behat\SpeedtrapExtension:
      scenario_threshold: 500 # this is in ms
```

To configure the number of scenarios reported (default 10) specify the `report_length` configuration option:

```yaml
default:
  extensions:
    Brunty\Behat\SpeedtrapExtension:
      report_length: 2
```

Optionally you may also set `step_threshold` for individual steps to be reported. When the step threshold is `0`, the step threshold is ignored. The step threshold defaults to `0` (ignored):

```yaml
default:
  extensions:
    Brunty\Behat\SpeedtrapExtension:
      step_threshold: 100 # this is in ms
```

## Contributing

This started as a small personal project.

Although this project is small, openness and inclusivity are taken seriously. To that end a code of conduct (listed in the contributing guide) has been adopted.

[Contributor Guide](CONTRIBUTING.md)
