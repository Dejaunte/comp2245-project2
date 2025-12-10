<?php
require_once 'auth.php';
require_once 'admin_menu.php';

requireAdminAuthentication();
$activePage = 'new_contact';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dolphin CRM - Add Contact</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <header class="top-bar">
        <div class="top-brand">
            <img src="assets/dolphin.svg" alt="Dolphin CRM" class="brand-logo">
            <div>
                <span class="brand-title">Dolphin CRM</span>
            </div>
        </div>
    </header>

    <div class="layout">
        <aside class="sidebar">
            <?php renderAdminSidebar($activePage); ?>
        </aside>

        <main class="page-shell">
            <div class="form-hero">
                <h1>New Contact</h1>
            </div>

            <div class="panel panel-compact">
                <section class="panel-body">
                    <form class="contact-form" action="#" method="post" novalidate>
                        <div class="form-grid-single">
                            <div class="form-group form-group-short">
                                <label for="title" class="form-label">Title</label>
                                <select id="title" name="title" class="form-input">
                                    <option>Mr</option>
                                    <option>Ms</option>
                                    <option>Mrs</option>
                                    <option>Dr</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-grid-two">
                            <div class="form-group">
                                <label for="firstname" class="form-label">First Name</label>
                                <input type="text" id="firstname" name="firstname" class="form-input" placeholder="Jane">
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" id="lastname" name="lastname" class="form-input" placeholder="Doe">
                            </div>
                        </div>

                        <div class="form-grid-two">
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-input" placeholder="something@example.com">
                            </div>
                            <div class="form-group">
                                <label for="telephone" class="form-label">Telephone</label>
                                <input type="tel" id="telephone" name="telephone" class="form-input">
                            </div>
                        </div>

                        <div class="form-grid-two">
                            <div class="form-group">
                                <label for="company" class="form-label">Company</label>
                                <input type="text" id="company" name="company" class="form-input">
                            </div>
                            <div class="form-group">
                                <label for="type" class="form-label">Type</label>
                                <select id="type" name="type" class="form-input">
                                    <option>Sales Lead</option>
                                    <option>Support</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-grid-single">
                            <div class="form-group">
                                <label for="assigned_to" class="form-label">Assigned To</label>
                                <select id="assigned_to" name="assigned_to" class="form-input">
                                    <option>Andy Bernard</option>
                                    <option>Pam Beesley</option>
                                    <option>Dwight Schrute</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="submit-btn">Save</button>
                        </div>
                    </form>
                </section>
            </div>
        </main>
    </div>
</body>
</html>
