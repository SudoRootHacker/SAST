# DevSecOps CI/CD Pipeline – Project Details

## Overview
This project demonstrates a complete DevSecOps CI/CD pipeline integrating multiple security tools into the software development lifecycle.

The goal of the project is to automatically detect security issues in code, dependencies, and running applications before deployment to production.

---

## Architecture

Developer
   |
Push Code
   |
GitHub Repository
   |
Webhook Trigger
   |
Jenkins CI/CD Pipeline
   |
CI Stage
   |-- Trivy (Dependency Vulnerability Scan)
   |-- Gitleaks (Secret Detection)
   |-- SonarQube (SAST)
   |
Build Stage
   |-- Docker Image Build
   |-- SBOM Generation using Syft
   |
QA Environment
   |-- Deploy Application
   |-- DAST Scan using OWASP ZAP
   |
Staging Environment
   |-- Production-like environment
   |-- Smoke Testing
   |
Production
   |-- Final Deployment

---

## Security Tools Used

### SonarQube
Static Application Security Testing (SAST) tool used to detect:
- Code smells
- Security vulnerabilities
- Bugs

### Trivy
Used for:
- Dependency vulnerability scanning
- Container image scanning

### Gitleaks
Detects:
- Hardcoded secrets
- API keys
- Credentials in source code

### Syft
Used for generating a **Software Bill of Materials (SBOM)**.

### OWASP ZAP
Dynamic Application Security Testing (DAST) tool used to scan the running application for vulnerabilities.

---

## Vulnerabilities Included in the Demo Application

The application intentionally includes vulnerable code to demonstrate security scanning tools.

Examples:

- Reflected Cross-Site Scripting (XSS)
- Command Injection
- Local File Inclusion (LFI)
- Path Traversal
- Hardcoded Secrets
- Weak Cryptography (MD5)
- Insecure Randomness
- Open Redirect
- Log Injection

These vulnerabilities allow security tools in the pipeline to detect and report issues during automated scans.

---

## Environments

The pipeline deploys the application into multiple environments:

QA Environment  
http://localhost:8081

Staging Environment  
http://localhost:8083

Production Environment  
http://localhost:8082

Each environment runs as a separate Docker container.

---

## Learning Objectives

This project demonstrates:

- CI/CD pipeline automation
- Integration of security tools in DevOps
- Automated vulnerability detection
- Multi-environment deployment
- Containerized application deployment
- DevSecOps best practices

---

## Future Improvements

Possible improvements to the project include:

- Container registry integration
- Kubernetes deployment
- Infrastructure as Code
- Automated approval gates
- Security policy enforcement

---

## Disclaimer

This project contains intentionally vulnerable code and should only be used for **educational and testing purposes**.
