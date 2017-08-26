# README

# Usage



> rails 5.0.4
> ruby 2.3.1



>参考記事
https://tsuchikazu.net/mac_rail_setup/
これのMysQLのインストールまでやればOK



>コマンドラインツールのインストール
xcode-select --install
>Homebrewのインストール
cd  #ホームディレクトリに移動
pwd #ホームディレクトリにいるかどうか確認
ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"  #コマンドを実行
>Homebrewのアップデート
brew update
>rbenv ruby-buildのインストール
brew install rbenv ruby-build
>rbenvを使えるように、.bash_profileへ書き込み
echo 'eval "$(rbenv init -)"' >> ~/.bash_profile
>.bash_profileの変更の更新
source ~/.bash_profile
>irbの日本語の対応
brew install readline
>readlineを使えるようにする
brew link readline --force
>readlineを利用してrubyのインストール
RUBY_CONFIGURE_OPTS="--with-readline-dir=$(brew --prefix readline)"
rbenv install 2.3.1
>rubyの起動準備
rbenv rehash
>利用するrubyの選択
rbenv global 2.3.1
>rubyのバージョン確認
ruby -v
2.3.1となっていることを確認
>mysqlのインストール
brew install mysql56 mysql
>mysqlの自動起動設定
mkdir ~/Library/LaunchAgents 
ln -sfv /usr/local/opt/mysql\@5.6/*.plist ~/Library/LaunchAgents
launchctl load ~/Library/LaunchAgents/homebrew.mxcl.mysql\@5.6.plist 
>bundlerのインストール
gem install bundler
>rubyonrailsのインストール
gem install rails --version='5.0.4'
rbenv rehash
>railsのバージョン確認
rails -v



>cd #ホームディレクトリへ移動
>pwd #今いるディレクトリの確認
>cd Desktop #Desktopディレクトリへ移動
>mkdir A+plus #A+plus用フォルダを作る
>cd A+plus #A+plus用フォルダへ移動
>git clone https://github.com/ei-plus/testRepo.git #掲示板のソースコードをダウンロード
>cd testRepo
>bundle install #掲示板アプリを起動するのに必要なもののインストール
>rails s #サーバ起動。
>ブラウザのURLにhttp://localhost:3000と打ってエンター




