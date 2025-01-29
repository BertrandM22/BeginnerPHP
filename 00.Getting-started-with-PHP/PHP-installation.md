# PHP installation

Like any good recipe, we start with the ingredients.
What do we actually need in our installation?

- PHP - `The language`
- Apache - `The server`
- MySQL - `The Database`

Curious why we need more than just PHP? [Discover it in the PHP basics.](PHP-basics.md)

## Step 1: installing

> DISCLAIMER: There's multiple paths to a good local setup. If you're not sure which one to use, ask your coach.

### Option 1 - Straight to the target: all-in tools like MAMP

Some tools provide all of these services in one installation.
If you're already familiar with one, feel free to use it.
If not, these are some recommendations:

- [XAMPP (currently most recommended tool)](https://www.apachefriends.org/faq_linux.html): `Linux - Mac - Windows`
- [MAMP](https://www.mamp.info/en/downloads/): `Mac ( - latest version also for Windows, but has some minor issues)`
- [WAMP](https://www.wampserver.com/en/download-wampserver-64bits/): `Windows`
- [AMPPS](https://ampps.com/): `Linux`

### Option 2 - A hobbly bobbly road: manual install

If you need full control at any moment (e.g. on a server), a manual installation could be the thing to do.
It's different for every OS (operating system) and can be a tricky thing to do.

### Option 3 - Docker: a helpful whale

[Docker](https://www.docker.com/) is a tool that has similarities with both all-in tools and manual installs.
It allows the developer to create `containers`: environments containing all relevant install for a specific project.
The goal is to share these containers between all project members (and other environments) so everyone is working with the same setup. The upfront setup requires a lot more time and can be tricky, especially the first time.
Once fully set up, the hard part should be done and Docker should make your dev life easier.

## Step 2: configuration

You will be able to assign a webroot.
This is the root location of your local server: everything inside can be loaded as website and use PHP.
Paths will then start here. Example: localhost:8888/your-exercise/index.php

### htdocs

Move your local "BeCode" exercise folder to your htdocs folder.

OR

Configure your server tool to read from your "BeCode" exercise folder instead of htdocs