# React Starter Block

## About
React Starter Block is a basic example of a decoupled Drupal component that you can use as a starting point. It pulls in a list of nodes as a demonstration.

## Getting started
To use as a starter block, do not clone the repository. Download it and start your own Git repository or add it to your existing project's repo. 

The basic build tools (Webpack and Babel) are set up and ready to begin developing with React. Change "react_starter_block" throughout the module to use your own module name.

## Requirements
- Drupal 8.x or higher
- JSON:API module enabled
- npm 6.13.x or higher
- Node.js 10.14.x or higher
- Acquia Lightning Basic Pages created  - This is for demonstration purposes. If you don't have the Lightning profile installed, you can create your own Basic page content type.

### Requirement resources
- [Learn how to install Node.js and npm](https://www.npmjs.com/get-npm).

## Installation
- Download the module to the `modules/custom` folder
- On the command line, cd into `react_starter_block`
- Run `npm install`
- Run `npm run build` to build your app for production
- In your Drupal _admin > block > structure_, place the **React Starter Block** into a theme region

## NPM commands
- `npm run build`: Saves assets into js/dist. Use as part of your CI build.
- `npm run start`: Listens for changes in js/src and automatically rebuilds assets with sourcemaps into js/dist.

## Roadmap
- Adapt module to use drush commands to generate a custom starter block
  - Add ability to name generated module
  - Add ability to chose node type for example during setup (Landing or Basic for Lightning profile or article for vanilla install?)
  - Add ability to install prettier and eslint?
