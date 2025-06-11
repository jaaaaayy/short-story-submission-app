# Git Commit Message Conventions

This document outlines the Git commit message conventions for this project. Following these conventions ensures that the project’s commit history is clear, consistent, and easy to understand for all team members.

## Commit Message Structure

Each commit message should consist of a **header**, an optional **body**, and an optional **footer**. The general structure is as follows:

```
<type>: <short summary> (max 50 characters)

<optional detailed description>

<optional footer with references to issues or tickets>
```

### Example Commit Message

```
feat: Add user authentication system

Implemented a token-based authentication system that allows users to
log in and protect their sensitive data. This change improves
security and usability for the application.

Fixes #123
```

---

## 1. **Commit Header**

The header consists of a **type** and a **short summary** (subject).

-   **Limit the subject line to 50 characters**.
-   **Capitalize** the first word.
-   **Do not end the subject line with a period**.
-   **Use the imperative mood** in the subject line (e.g., “Add feature” not “Added feature”).
-   **Keep the subject line concise** but descriptive enough.

### Types

To categorize the purpose of commits, use the following types:

-   **feat**: A new feature for the project.
-   **fix**: A bug fix.
-   **docs**: Documentation-only changes.
-   **style**: Changes that do not affect the meaning of the code (white-space, formatting, missing semi-colons, etc.).
-   **refactor**: A code change that neither fixes a bug nor adds a feature.
-   **perf**: A code change that improves performance.
-   **test**: Adding missing tests or correcting existing tests.
-   **chore**: Changes to the build process, package manager config, or other auxiliary tools.

---

## 2. **Commit Body**

The commit body is used to explain **why** the change was made and **what** it affects. Use it when additional context is needed beyond the header.

-   Separate the body from the header with a blank line.
-   Wrap the body at 72 characters.
-   Explain the **reasoning** behind the changes and its **impact**.

Example body:

```
Add logic to handle invalid login attempts for security reasons.

We are implementing rate-limiting on login attempts to prevent
brute-force attacks. This improves the security of user accounts.
```

---

## 3. **Commit Footer**

The footer is optional and is used for referencing issues, tickets, or breaking changes.

-   Use `Fixes #<issue_number>` to reference an issue that is fixed by the commit.
-   Use `BREAKING CHANGE: <description>` to describe any breaking changes introduced.

Example footer:

```
Fixes #456
BREAKING CHANGE: The login method now requires an extra security token.
```

---

## Additional Guidelines

-   **Keep commits focused**: Each commit should focus on a single purpose (e.g., fixing a bug or adding a feature). Avoid mixing unrelated changes.
-   **Use tags consistently**: Make sure to use the same commit message tags (e.g., `feat`, `fix`) throughout the project.
-   **Reference issues**: When applicable, reference issue numbers in the footer to create links between commits and project issues.

By following these guidelines, we ensure a cleaner and more readable Git history for everyone working on this project.
