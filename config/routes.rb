Rails.application.routes.draw do
  devise_for :users
  root 'topics#index'
  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html
  resources :topics, only: [:index, :new, :create] do
    resources :responses, only: [:index, :new, :create]
  end
end
