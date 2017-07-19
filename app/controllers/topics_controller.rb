class TopicsController < ApplicationController
  def index
    @topics = Topic.all
  end

  def new
  end

  def create
    Topic.create(topic_params)
  end

  private
  def topic_params
    params.permit(:title)
  end

end
