# Requirements

- node
- nvm
- yarn
- composer

# Local setup

```
create storage folder
- wp-content/uploads/storage

create symlink (the ln -s command is relative so it needs to run from inside the theme folder)
- cd path-to-wp/wp-content/themes/persistagency/
- ln -s '../../uploads/storage'

```

# Develop

```

nvm use 14         
composer install   
yarn               
yarn start
 
```

# Push to server
yarn build:production

# Shortcodes

Social Icons:

`[social_icons]`
