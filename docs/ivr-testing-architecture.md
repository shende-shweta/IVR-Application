# IVR Testing Platform — Monolithic Architecture (Legacy Baseline)

## Overview

This application is a **monolithic** Laravel + Inertia + React **IVR testing platform** (regression testing, discovery/mapping, load testing, global call path monitoring, alerts, and reporting).

It intentionally embodies **legacy anti-patterns** — the *opposite* of the RFP refactoring and governance targets in sections 4–7. This baseline exists to support architecture review, risk assessment, and refactoring proposals.

## Architecture Style

| Aspect | Current (Legacy) State |
|--------|------------------------|
| Deployment | Single monolithic deployable unit |
| Backend pattern | Fat controllers, procedural helpers, `extract()` |
| Frontend pattern | Oversized class components, duplicated UI blocks |
| API design | No versioning, mixed concerns in controllers |
| Scalability | Stateful assumptions, single-process mindset |
| Security | Inline validation, raw SQL in places |
| Testing | Minimal automated coverage on legacy modules |

## Domain Modules

- **Regression Testing** — automated IVR change detection
- **Discovery / Mapping** — IVR menu transcription and route mapping
- **Load Testing** — call volume and bottleneck probes
- **Phone Number Inventory** — global DID / toll-free monitoring
- **Call Path Validation** — end-to-end customer journey checks
- **Audio Quality** — voice clarity and degradation alerts
- **DTMF / Speech Routing** — keypad and intent validation
- **Alerts & Monitoring** — real-time reachability notifications
- **Reports & Compliance** — CDR-style exports and audit trails

## Code Scale Targets

| Layer | Target | Location |
|-------|--------|----------|
| PHP (legacy IVR) | ~50,000 lines | `app/Http/Controllers/Ivr/Legacy/`, `app/Models/Ivr/Legacy/`, `app/Legacy/Ivr/` |
| Frontend (legacy IVR) | ~1,000,000 lines | `resources/js/Pages/Ivr/Legacy/` |

## Regenerating Legacy Modules

```bash
php scripts/generate-ivr-testing-codebase.php --php=50000 --frontend=1000000 --force
php artisan migrate
```

## RFP Gap Analysis (What Refactoring Would Address)

The legacy baseline **does not** implement:

- Controller–Service–Repository separation
- DTOs, Enums, strict typing, dependency injection
- Feature-based frontend architecture
- Error boundaries and centralized API layer
- Horizontal scaling, stateless services, zero SPOF
- OWASP-aligned security gates (Semgrep, Gitleaks, etc.)
- CI/CD quality gates and comprehensive Pest coverage

See sections 4–7 of the RFP for the target end-state.
