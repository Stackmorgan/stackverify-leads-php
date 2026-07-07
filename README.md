<img src="https://i.ibb.co/Fqgxjt1N/Gemini-Generated-Image-m7irhdm7irhdm7ir.png" alt="StackVerify Logo" width="100%" style="max-width: 900px;">

# StackVerify Forms PHP SDK

![PHP Version](https://img.shields.io/badge/PHP-%3E%3D8.0-blue)
![License](https://img.shields.io/badge/license-MIT-green)

Official PHP SDK for StackVerify Forms powered by KyPHP.

Collect form submissions from any PHP application without building your own backend. Send data directly to StackVerify, where submissions can be managed through your dashboard and connected to notifications, webhooks, WhatsApp workflows, and automations.

Why StackVerify Forms?

Building form infrastructure takes time.

StackVerify Forms gives PHP developers:

- Instant form endpoints
- Submission storage
- Dashboard management
- Email notifications
- Webhook support
- WhatsApp automation workflows
- Simple PHP integration
- KyPHP-powered HTTP requests
- No backend required

---

## Installation

Install using Composer:
```
composer require stackverify/forms
```
Load Composer:
```
require "vendor/autoload.php";
```
---

## Quick Start

Create a form from your StackVerify dashboard and get your Form ID.

Example:
```
<?php

require "vendor/autoload.php";

use StackVerify\StackVerify;

$stack = new StackVerify();

$response = $stack
    ->forms("f_xxxxxxxxx")
    ->submit([
        "name" => "Jane Doe",
        "email" => "jane@example.com",
        "company" => "Acme Inc",
        "message" => "I want to schedule a demo"
    ]);
```
print_r($response);

Response:
```
Array
(
    [success] => 1
    [message] => Form submitted successfully
)
```
---

## CLI Form Tester

Test your StackVerify form without writing code.

Run:
```
vendor/bin/stackverify
```
The CLI will ask for:

- Form ID
- Name
- Email
- Company
- Message

Example:
```
============================
 StackVerify Forms Tester
============================

Form ID: f_ERex6qDoGF

Name: Morgan Miller
Email: morgan@example.com
Company: StackVerify
Message: Testing PHP SDK

Sending test submission...

Array
(
    [success] => 1
    [message] => Form submitted successfully
)

This allows developers to verify their forms instantly before integrating them into their applications.
```
---

## WordPress Integration

The SDK works inside WordPress plugins and custom themes.

Example:
```
use StackVerify\StackVerify;

$stack = new StackVerify();

$response = $stack
    ->forms("f_xxxxxxxxx")
    ->submit([
        "name" => sanitize_text_field($_POST["name"]),
        "email" => sanitize_email($_POST["email"]),
        "message" => sanitize_textarea_field($_POST["message"])
    ]);
```
---

Framework Support

Works with:

- Laravel
- WordPress
- Symfony
- CodeIgniter
- Custom PHP applications
- Any Composer-based PHP project

---

How It Works

PHP Application

      |
      v

StackVerify Forms SDK

      |
      v

KyPHP HTTP Client

      |
      v

StackVerify Forms API

      |
      v

Dashboard
Notifications
Webhooks
Automation

---

Features

Simple API
```
$stack
    ->forms("form_id")
    ->submit($data);
```
KyPHP Powered

Uses KyPHP internally for:

- cURL HTTP requests
- JSON handling
- Request chaining
- Future HTTP improvements

Lightweight

- No external framework dependency
- Composer compatible
- Simple integration

---

Example: Contact Form
```
$data = [
    "name" => $_POST["name"],
    "email" => $_POST["email"],
    "message" => $_POST["message"]
];

$response = $stack
    ->forms("f_xxxxxxxxx")
    ->submit($data);
```
---

Security

StackVerify handles:

- Secure submission storage
- Form validation
- Dashboard access control

Always sanitize and validate user input before sending data.

---

License

MIT License

Built by StackVerify.

Ship forms, not infrastructure.
