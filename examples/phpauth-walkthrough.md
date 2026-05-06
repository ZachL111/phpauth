# Phpauth Walkthrough

The fixture is intentionally compact, so the review starts with the cases that pull farthest apart.

| Case | Focus | Score | Lane |
| --- | --- | ---: | --- |
| baseline | trust boundary | 230 | ship |
| stress | claim drift | 138 | watch |
| edge | replay exposure | 197 | ship |
| recovery | policy width | 157 | ship |
| stale | trust boundary | 237 | ship |

Start with `stale` and `stress`. They create the widest contrast in this repository's fixture set, which makes them better review anchors than the middle cases.

If `stress` becomes less cautious without a clear reason, I would inspect the drag input first.
