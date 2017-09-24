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
cd  #ホームディレクトリに移動 <br>
pwd #ホームディレクトリにいるかどうか確認<br>
ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"  #コマンドを実行<br>

>Homebrewのアップデート
brew update<br>

>rbenv ruby-buildのインストール
brew install rbenv ruby-build <br>

>rbenvを使えるように、.bash_profileへ書き込み
echo 'eval "$(rbenv init -)"' >> ~/.bash_profile <br>

>.bash_profileの変更の更新
source ~/.bash_profile <br>

>irbの日本語の対応
brew install readline <br>

>readlineを使えるようにする
brew link readline --force <br>

>readlineを利用してrubyのインストール
RUBY_CONFIGURE_OPTS="--with-readline-dir=$(brew --prefix readline)" <br>
rbenv install 2.3.1 <br>

>rubyの起動準備
rbenv rehash <br>

>利用するrubyの選択
rbenv global 2.3.1 <br>

>rubyのバージョン確認
ruby -v <br>
2.3.1となっていることを確認 <br>

>mysqlのインストール
brew install mysql56 mysql <br>

>mysqlの自動起動設定
mkdir ~/Library/LaunchAgents <br>
ln -sfv /usr/local/opt/mysql\@5.6/*.plist ~/Library/LaunchAgents <br>
launchctl load ~/Library/LaunchAgents/homebrew.mxcl.mysql\@5.6.plist <br>

>bundlerのインストール
gem install bundler <br>

>rubyonrailsのインストール
gem install rails --version='5.0.4' <br>
rbenv rehash <br>

>railsのバージョン確認
rails -v <br>



>cd #ホームディレクトリへ移動 <br>
>pwd #今いるディレクトリの確認 <br>
>cd Desktop #Desktopディレクトリへ移動 <br>
>mkdir A+plus #A+plus用フォルダを作る <br>
>cd A+plus #A+plus用フォルダへ移動 <br>
>git clone https://github.com/ei-plus/testRepo.git #掲示板のソースコードをダウンロード <br>
>cd testRepo <br>
>bundle install #掲示板アプリを起動するのに必要なもののインストール <br>
>rails s #サーバ起動。 <br>
>ブラウザのURLにhttp://localhost:3000と打ってエンター




