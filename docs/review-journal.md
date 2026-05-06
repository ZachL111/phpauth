# Review Journal

The repository goal stays the same: validate OAuth callback state, nonce, issuer, audience, and redirect policy fixtures. This note explains the added review angle.

The local checks classify each case as `ship`, `watch`, or `hold`. That gives the project a small review vocabulary that matches its security tooling focus without claiming live deployment or external usage.

## Cases

- `baseline`: `trust boundary`, score 230, lane `ship`
- `stress`: `claim drift`, score 138, lane `watch`
- `edge`: `replay exposure`, score 197, lane `ship`
- `recovery`: `policy width`, score 157, lane `ship`
- `stale`: `trust boundary`, score 237, lane `ship`

## Note

The useful failure mode here is a wrong decision on a named case, not a vague style disagreement.
