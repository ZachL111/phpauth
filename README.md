# phpauth

`phpauth` is a focused PHP codebase around validate OAuth callback state, nonce, issuer, audience, and redirect policy fixtures. It is meant to be easy to inspect, run, and extend without a hosted service.

## Phpauth Walkthrough

I would read the project from the outside in: command, fixture, model, then roadmap. That keeps the security tooling idea grounded in files that can be checked locally.

## Reason For The Project

The repository exists to keep a technical idea small enough to reason about. The implementation avoids external dependencies where possible, then uses fixtures to make changes easy to review.

## Where Things Live

- `src`: primary implementation
- `tests`: verification harness
- `fixtures`: compact golden scenarios
- `examples`: expanded scenario set
- `metadata`: project constants and verification metadata
- `docs`: operations and extension notes
- `scripts`: local verification and audit commands

## Capabilities

- Includes extended examples for replay guards, including `recovery` and `degraded`.
- Documents claim validation tradeoffs in `docs/operations.md`.
- Runs locally with a single verification command and no external credentials.
- Stores project constants and verification metadata in `metadata/project.json`.
- Adds a repository audit script that checks structure before running the language verifier.

## How It Is Put Together

The interesting part is the boundary between accepted and reviewed scenarios. Extended examples sit near that boundary so future edits can show whether the model became more permissive or more cautious. The PHP implementation uses strict types and a small namespaced policy class.

## Getting It Running

Clone the repository, enter the directory, and run the verifier. No database server, cloud account, or token is required.

## Data Notes

The extended cases are not random smoke tests. `degraded` keeps pressure on the review path, while `recovery` shows the model when capacity and weight are strong enough to clear the threshold.

## Command Examples

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/verify.ps1
```

This runs the language-level build or test path against the compact fixture set.

## Check The Work

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/audit.ps1
```

The audit command checks repository structure and README constraints before it delegates to the verifier.

## Possible Extensions

- Add a loader for `examples/extended_cases.csv` and promote selected cases into the language test suite.
- Add a short report command that prints the score breakdown for a single scenario.
- Add malformed input fixtures so the failure path is as visible as the happy path.
- Add one more security tooling fixture that focuses on a malformed or borderline input.

## Tradeoffs

This code is local-first. It makes no claim about deployed usage and avoids credentials, hosted state, and environment-specific setup.
