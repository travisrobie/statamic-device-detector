# DeviceDetector
Requirement: Statamic v2.x Version: 1.0


## What is this
DeviceDetector is a Statamic port of [matomo-org/device-detector](https://github.com/matomo-org/device-detector)
You may output or use as a conditional the OS, device, brand and model of the client in your templates.

## Installation
1.  Copy DeviceDetector to site/addons
2.  Run `php please update:addons` at the root of your statamic project.

## Usage
`{{ device_detector:client_info }}`
`{{ device_detector:os_info }}`
`{{ device_detector:device }}` - Returns 'desktop', 'tablet', 'smartphone' etc.
`{{ device_detector:brand }}`
`{{ device_detector:model }}`
