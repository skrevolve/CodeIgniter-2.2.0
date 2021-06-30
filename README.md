# CodeIgniter 2.2.0
회사 레거시 코드를 이해하기 위한 테스트 코드  

Open Source PHP Framework (originally from EllisLab)  

For more info, please refer to the user-guide at http://www.codeigniter.com/userguide2/  
(also available within the download package for offline use)

**WARNING:** *CodeIgniter 2.x is no longer under development and only receives security patches until October 31st, 2015.
Please update your installation to the latest CodeIgniter 3.x version available
(upgrade instructions [here](http://www.codeigniter.com/userguide3/installation/upgrade_300.html)).* 

# Directory structure

index.php가 위치하며 CI에서 경로를 필요로하는 동작(파일등)에서 기준이 되는 디렉토리

### application

사용자가 작성하는 소스(MVC)와 여러가지 환경 설정 파일들이 저장되는 최상위 디렉토리

- cache : 캐쉬파일

- config : 환경설정 파일

- controllers : MVC중 컨트롤러 파일

- core : core기능들을 사용자가 확장할 때 쓰는 파일

- errors : errors 정의 페이지

- helpers : 1helper파일

- hooks : 2hooks파일

- language : 다국어를 사용할 때 사용하는 언어파일

- libraries : 사용자 정의 3라이브러리 파일

- logs : log파일이 적재됨

- models : MVC중 모델 파일

- third_party : 서드파티 라이브러리 파일

- views : MVC중 뷰 파일

### system
- core : 기본적으로 수정하지 않는것을 원칙으로 하나 커스터마이징시 수정이 불가피한 경우가 있다.
### user_guide

사용자 가이드 파일