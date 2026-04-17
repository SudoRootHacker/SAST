# DevSecOps CI/CD Pipeline with Jenkins

This project demonstrates a complete DevSecOps pipeline that integrates security testing into the CI/CD workflow.

The pipeline automatically scans code, dependencies, and running applications to detect security vulnerabilities before deployment.

---

## Technologies Used

- Jenkins
- Docker
- SonarQube
- Trivy
- Gitleaks
- Syft
- OWASP ZAP

---

## Pipeline Workflow

Developer → GitHub → Jenkins Pipeline

CI Stage
- Trivy dependency scanning
- Gitleaks secret detection
- SonarQube static code analysis

Build Stage
- Docker image build
- SBOM generation

QA Stage
- Application deployment
- OWASP ZAP dynamic security testing

Staging Stage
- Production-like deployment
- Smoke testing

Production Stage
- Final deployment

---

## Included Vulnerabilities

The application intentionally includes vulnerable code to trigger security findings:

- Cross-Site Scripting (XSS)
- Command Injection
- Local File Inclusion (LFI)
- Path Traversal
- Hardcoded Secrets
- Weak Cryptography
- Open Redirect
- Log Injection
- Code Smells

---

## Project Documentation

Detailed project documentation can be found in:

docs/project-details.md

---

## Author

Kanishka Khandelwal  
Cybersecurity & DevSecOps Enthusiast

LinkedIn:  
https://www.linkedin.com/in/kanishka-khandelwal-a49050263/
