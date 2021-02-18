# Requirements

- node
- nvm
- yarn
- composer

# Local setup

```

create symlink:
cd path-to-wp/wp-content/themes/persistagency/
ln -s 'path-to-wp/wp-content/uploads/storage'

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
