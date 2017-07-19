class ResponsesController < ApplicationController
  def index
    @responses = Response.where(topic_id: params[:topic_id])
  end
  def new
    @topic = Topic.find(params[:topic_id])
    @response = Response.new
  end
  def create
    Response.create(response_params)
  end

  private
  def response_params
    if user_signed_in?
      params.require(:response).permit(:body, :user_id).merge(topic_id: params[:topic_id], user_id: current_user.id)
    else
      params.require(:response).permit(:body, :user_id).merge(topic_id: params[:topic_id])
    end
  end
end
