class Topic < ApplicationRecord
  has_many :responses
  has_many :users, through: :favorites
end
