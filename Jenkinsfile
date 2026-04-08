node {

stage('Checkout') {
checkout scm
}

stage('SonarQube Analysis') {
def scannerHome = tool 'SonarScanner'
withSonarQubeEnv('SonarQube') {
sh "${scannerHome}/bin/sonar-scanner"
}
}

}
