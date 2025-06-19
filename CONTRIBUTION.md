# Git Contribution Guide

Follow these guidelines to contribute to the project with clear commit messages and a safe workflow.

## Commit Message Format

Each commit message should follow this format:

```
<type>: <short summary> (max 50 characters)
```

## Example Commit Messages

```
feat: Add login functionality
fix: Resolve authentication timeout
docs: Update API reference
```

## Commit Types

Use one of these types to describe your change:

-   feat: A new feature for the project.
-   fix: A bug fix.
-   docs: Documentation-only changes.
-   style: Changes that do not affect the meaning of the code (white-space, formatting, missing semi-colons, etc.).
-   refactor: A code change that neither fixes a bug nor adds a feature.
-   perf: A code change that improves performance.
-   test: Adding missing tests or correcting existing tests.
-   chore: Changes to the build process, package manager config, or other auxiliary tools.

## Header Guidelines

-   Use imperative tone ("Add" not "Added")
-   Capitalize first word
-   No period at end
-   Keep under 50 characters

## Contribution Workflow

### 1. Create a Branch

Always work on a separate branch:

```
git checkout main
git pull origin main
git checkout -b <your-branch-name>
```

Example:

```
git checkout -b fix-login-bug
```

### 2. Make Your Changes

Edit files and implement your changes.

### 3. Stage and Commit

```
git add .
git commit -m "fix: Resolve login validation error"
```

### 4. Push Your Branch

```
git push origin <your-branch-name>
```

### 5. Open a Pull Request

-   Go to the repo on GitHub
-   Click "Pull requests"
-   Click "New pull request"
-   In the Compare changes section, set the base branch to main and the compare branch to your branch
-   Click "Create pull request"

### 6. Review & Merge

A maintainer will review your PR. Once approved, it will be merged.

### 7. Resolve Conflicts (if any)

-   Follow Git’s guidance to manually resolve the conflicts.
-   Commit the resolved changes.
-   Continue the merge process.

## Best Practices

-   Always branch from an updated main
-   Keep commits focused on single changes
-   Pull updates regularly to avoid conflicts
-   Use the correct commit type tag
-   Make frequent, small commits rather than large ones
