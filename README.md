# Twig+Tailwind Template

This project sets up a basic web project with Twig and Tailwind scaffolding. For a local development environment see: https://github.com/texasbaptists/vagrant-template. I prefer making the website a submodule of the local development repo. That way it can be deployed to other environments. 

### 1. Make a new project with `Use this template`

### 2. Make it a submodule. 
In the parent project (example https://github.com/texasbaptists/vagrant-template) run 
```
git submodule add [new-repo URL] sandbox.test
```
### 3. `cd` to the directory on the server 

### 4. Run `composer install`

### 5. Run `npm install`

### 6. Initialize Tailwindcss

```
npm run build
```